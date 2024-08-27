/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class NumberComplement {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findComplement( 3 ));
    }

    public static int findComplement(int num) {
        num^=((Integer.highestOneBit(num) << 1) - 1);
        return num;
    }

}
