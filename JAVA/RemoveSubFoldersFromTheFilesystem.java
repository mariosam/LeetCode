/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class RemoveSubFoldersFromTheFilesystem {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", removeSubfolders( new String[] {"/a","/a/b","/c/d","/c/d/e","/c/f"} ));
    }

    public static List<String> removeSubfolders(String[] folder) {
        int n = folder.length;
        Arrays.sort(folder);

        List<String> res = new ArrayList<>();
        res.add(folder[0]);
        int prevIdx = 0;
        for (int i = 1; i < n; i++) {
            String s = folder[i];
            String prev = folder[prevIdx];
            if (s.startsWith(prev) && s.charAt(prev.length()) == '/') {

            } else {
                res.add(s);
                prevIdx = i;
            }
        }
        return res;
    }

}
