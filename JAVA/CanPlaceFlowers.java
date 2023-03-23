/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CanPlaceFlowers {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", canPlaceFlowers( new int[]{1,22,1}, 2 ));
    }

    public static boolean canPlaceFlowers(int[] flowerbed, int n) {
        int last = -2;
        
        for ( int i=0; i < flowerbed.length; i++ ) {
            if ( flowerbed[i] == 1 ) {
                last = i;
            } else if ( i-last == 2 && (i == flowerbed.length - 1 || flowerbed[i+1] != 1 )) {
                n--;
                last = i;
            }
        }
        
        return n <= 0;
    }

}
