/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CompareVersionNumbers {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", compareVersion("1.2", "1.10"));
    }

    public static int compareVersion(String version1, String version2) {
        int i = 0, j = 0;
        int temp1, temp2;
        while (i < version1.length() || j < version2.length()) {
            temp1 = 0;
            temp2 = 0;
            
            while (i < version1.length() && version1.charAt(i) != '.') {
                temp1 = temp1 * 10 + Character.getNumericValue(version1.charAt(i++));
            }
            
            while (j < version2.length() && version2.charAt(j) != '.') {
                temp2 = temp2 * 10 + Character.getNumericValue(version2.charAt(j++));
            }
            
            if (temp1 == temp2) {
                i++;
                j++;
                continue;
            } else if (temp1 < temp2) return -1;
            else return 1;
        }
        
        return 0;
    }
}
