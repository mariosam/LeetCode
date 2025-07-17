/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MaximumMatchingOfPlayersWithTrainers {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", matchPlayersAndTrainers( new int[]{4,7,9}, new int[]{8,2,5,8} ));
    }

    public static int matchPlayersAndTrainers(int[] players, int[] trainers) {
        int m = players.length;
        int n = trainers.length;

        Arrays.sort(players);
        Arrays.sort(trainers);

        int i = 0;
        int j = 0;

        int res = 0;
        while (i < m && j < n) {
            if (players[i] <= trainers[j]) {
                i++;
                j++;
                res++;
            } else {
                j++;
            }
        }
        return res;
    }
}
