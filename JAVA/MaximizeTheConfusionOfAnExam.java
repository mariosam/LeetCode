/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MaximizeTheConfusionOfAnExam {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxConsecutiveAnswers( "TFFT", 10 ));
    }

    public static int maxConsecutiveAnswers(String answerKey, int k) {
        return Math.max(get('T', k, answerKey), get('F', k, answerKey));
    }

    private static int get(char c, int k, String answerKey) {
        int l = -1;
        int r = -1;
        while (r < answerKey.length() - 1) {
            r++;
            if (answerKey.charAt(r) == c) {
                k--;
            }
            if (k < 0) {
                l++;
                if (answerKey.charAt(l) == c) {
                    k++;
                }
            }
        }
        return r - l;
    }
}
