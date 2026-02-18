/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class ReverseBits {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", reverseBits(123));
    }

    public static int reverseBits(int n) {
        int res = 0;
		for(int i = 0; i < 32; i++){
			res = (n & 1) | res << 1;
			n >>= 1;
		}
        return res;
    }

}
