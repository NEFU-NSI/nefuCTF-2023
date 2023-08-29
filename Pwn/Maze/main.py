#!/usr/bin/env python

import PIL.Image
import sys

maze_path = "maze"
maze_offs = 0x13e0
maze_size = 17276
goal_x = 0xb2
goal_y = 0x5d

def err(s): sys.stderr.write("[-] %s\n" % s)


def die(s): err(s), sys.exit(1)


with open(maze_path, 'rb') as f:
    f.seek(maze_offs)
    buf = f.read(maze_size)
# try:
# except:
#     die("Could not extract maze data from binary")

arr = []

max_x = 0
max_y = 0

for a, b in zip(*[iter(buf)] * 2):
    x, y = a, b
    if x > max_x: max_x = x
    if y > max_y: max_y = y
    arr.append((x, y))

w = max_x + 1
h = max_y + 1

im = PIL.Image.new('RGB', (w, h), (255, 255, 255))

for pos in arr:
    im.putpixel(pos, (0, 0, 0))

im.resize((w * 4, h * 4)).save('maze.png')

NONE = 0 # Not visited yet
WALL = 1 # This position contains a wall
GOAL = 2 # This is the position we are searching for
DONE = 3 # Used to mark positions that have already been visited

# Simple recursive algorithm to solve the maze. Does not find an optimal
# path, but good enough. Does not include sub-paths leading to dead ends,
# that are backtracked during the search.
def find_path(x, y):
    # Yeah... Ugly, but gets the job done. :P
    global path, maze, max_x, max_y

    if maze[x][y] == GOAL:
        # The path is created in reverse, while backtracking
        path = [(x,y)]
        return True
    elif maze[x][y] == WALL or maze[x][y] == DONE:
        return False

    maze[x][y] = DONE

    if ((x < max_x and find_path(x+1, y))
    or  (y > 0     and find_path(x, y-1))
    or  (x > 0     and find_path(x-1, y))
    or  (y < max_y and find_path(x, y+1))):
        # Inserting instead of appending, since we are backtracking
        path.insert(0, (x,y))
        return True

    return False

# Create two-dimensional array for the maze data
maze = [[NONE for y in range(max_y+1)] for x in range(max_x+1)]

# Populate it with the occupied squares
for pos in arr: maze[pos[0]][pos[1]] = 1

# Mark the "winning" position
maze[goal_x][goal_y] = GOAL

path = None
find_path(1, 1)
print(path)

for i in range(1, len(path)):
    if path[i][0] > path[i-1][0]:
        print('east')
    elif path[i][0] < path[i-1][0]:
        print('west')
    elif path[i][1] > path[i-1][1]:
        print('south')
    elif path[i][1] < path[i-1][1]:
        print('north')

sys.exit(0)
