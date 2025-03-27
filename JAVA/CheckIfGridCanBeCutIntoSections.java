/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class CheckIfGridCanBeCutIntoSections {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", checkValidCuts( 3, new int[][]{{1,2},{2,3}} ));
    }

    public static boolean checkValidCuts(int n, int[][] rectangles) {
        int m = rectangles.length;
        Arrays.sort(rectangles,(o1,o2)->Integer.compare(o1[0],o2[0]));
        int max = rectangles[0][2];
        int cnt = 0;
        for(int i=1;i<m;i++) {
            if(rectangles[i][0]>=max) cnt++;
            max = Math.max(max,rectangles[i][2]);
        }
        if(cnt>=2) return true;
        Arrays.sort(rectangles,(o1,o2)->Integer.compare(o1[1],o2[1]));
        max = rectangles[0][3];
        cnt = 0;
        for(int i=1;i<m;i++) {
            if(rectangles[i][1]>=max) cnt++;
            max = Math.max(max,rectangles[i][3]);
        }
        return cnt>=2;
    }

}
