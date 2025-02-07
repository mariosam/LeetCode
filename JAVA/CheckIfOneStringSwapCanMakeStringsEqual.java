/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CheckIfOneStringSwapCanMakeStringsEqual {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", areAlmostEqual( "bank", "kanb" ));
    }

    public static boolean areAlmostEqual(String s1, String s2) {
        int[][] buf = new int[2][2];
        int count = 0;

        for (int i = 0; i < s1.length(); i++) {
            if (s1.charAt(i) != s2.charAt(i)) {
                if (count >= 2) return false;
                buf[count][0] = s1.charAt(i);
                buf[count][1] = s2.charAt(i);
                count++;
            }
        }

        if (count == 0) return true;
        if (count != 2) return false;
        return buf[0][0] == buf[1][1] && buf[0][1] == buf[1][0];
    }

}
