/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class SeparateBlackAndWhiteBalls {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minimumSteps( "101" ));
    }

    public static long minimumSteps(String s) {
        long steps = 0;
        long blackCount = 0;

        for (char color : s.toCharArray()) {
            if (color == '1') {
                blackCount++;
            } else {
                steps += blackCount;
            }
        }

        return steps;
    }

}
