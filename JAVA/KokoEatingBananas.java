/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class KokoEatingBananas {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minEatingSpeed(new int[]{2,7,11,15}, 9));
    }

    public static int minEatingSpeed(int[] piles, int h) {
        int start = 1, end = 1_000_000_000;
        int max = end;
        
        while (start + 1 < end) {
            int mid = start + (end - start) / 2;
            int count = calc(piles, mid);
            if (count > h) start = mid;
            else {
                if (mid + 1 < max && calc(piles, mid + 1) <= h) {
                    end = mid;
                    continue;
                }
                return start;
            }
        }
        
        if (calc(piles, start) <= h) return start;
        return end;
    }
    
    private static int calc(int[] piles, double k) {
        int count = 0;
        for (int i : piles) {
            count += Math.ceil(i / k);
        }
        return count;
    }

}
