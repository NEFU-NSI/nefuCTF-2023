#include "pch.h"

#include "framework.h"

// valid key flag{g1ad_2_see_u_here}
BOOL validKey(CString key) {
    if (key.IsEmpty()) {
        return FALSE;
    }

    if (key.GetLength() != 23) {
        return FALSE;
    }

    if (key.Compare(_T("flag{g1ad_2_see_u_here}"))) {
        return FALSE;
    }

    return TRUE;
}
