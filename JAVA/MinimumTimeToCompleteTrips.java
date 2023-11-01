/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MinimumTimeToCompleteTrips {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minimumTime( new int[]{1,2,2,1}, 1 ));
    }

    public static long minimumTime(int[] time, int totalTrips) {
        int maxValue = 0;
        for (int t : time) {
            maxValue = Math.max(maxValue, t);
        }

        long left = 1;
        long right = (long) totalTrips * maxValue;

        while (left < right) {
            long mid = left + (right - left) / 2;
            if (check(time, mid) >= totalTrips) {
                right = mid;
            } else {
                left = mid + 1;
            }
        }

        return left;
    }

    private static int check(int[] arr, long per) {
        int count = 0;
        for (int t : arr) {
            count += per / t;
        }
        return count;
    }

}
