/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class RotateString {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", rotateString( "abcde", "cdeab" ));
    }

    public static boolean rotateString(String s, String goal) {
        if (s.length() != goal.length()) {
            return false;
        }
        String str = s + s;
        int idx = str.indexOf(goal);
        return idx != -1;
    }

}
