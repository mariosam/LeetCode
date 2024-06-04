/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class ScoreOfString {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", scoreOfString( "hello" ));
    }

    public static int scoreOfString(String s) {
        int score = 0;

        for (int i = 1; i < s.length(); i++) {
            score += Math.abs(s.charAt(i - 1) - s.charAt(i));
        }

        return score;
    }

}
