#include <iostream>
#include <string>

int main() {
    std::string flag;

    std::cin >> flag;

    if (flag == "flag{upx_is_basically_nothing}") {
        std::cout << "Congrats!" << std::endl;
    } else {
        std::cout << "Wrong flag!" << std::endl;
    }

    return 0;
}
