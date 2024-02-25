/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class FindTheTownJudge {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findJudge( 4, new int[][]{{0}} ));
    }

    public static int findJudge(int n, int[][] trust) {
        int arr[] = new int[n+1];
        int rv = -1;
        for(int i=0; i< trust.length; i++){
            arr[trust[i][1]]++;
        }
        
        for(int j=0; j<arr.length; j++){
            if(arr[j] == n-1){
                rv = j;
            }
        }
        
        for(int i=0; i< trust.length; i++){
            if(trust[i][0] == rv){
                return -1;
            }
        }
            
        return  rv;
    }
}
