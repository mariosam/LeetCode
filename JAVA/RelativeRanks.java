/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class RelativeRanks {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findRelativeRanks( new int[]{10,3,8,9,4} ).toString());
    }

    public static String[] findRelativeRanks(int[] score) {
        String[] result = new String[score.length];
        int max = 0;
        for (int i : score) {
            if (i > max) max = i;
        }
        int[] hash = new int[max + 1];
        for (int i = 0; i < score.length; i++) {
            hash[score[i]] = i + 1;
        }
        int place = 1;
        for (int i = hash.length - 1; i >= 0; i--) {
            if (hash[i] != 0) {
                if (place == 1) {
                    result[hash[i] - 1] = "Gold Medal";
                } else if (place == 2) {
                    result[hash[i] - 1] = "Silver Medal";
                } else if (place == 3) {
                    result[hash[i] - 1] = "Bronze Medal";
                } else {
                    result[hash[i] - 1] = place + "";
                }
                place++;
            }
        }
        return result;
    }

}
