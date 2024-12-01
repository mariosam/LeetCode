/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class FindChampionII {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findChampion( 5, new int[][]{{1,2,3},{4,5,6}} ));
    }

    public static int findChampion(int n, int[][] edges) {
        int[] greater = new int[n];
        for(int i = 0; i < n; i++) greater[i] = i;
        for(int[] edge : edges) greater[edge[1]] = edge[0];
        int valid = -1;
        for(int i = 0; i < n; i++) {
            if(greater[i] == i) {
                if(valid == -1) valid = i;
                else return -1;
            }
        }
        return valid;
    }

}
