/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class AddDigits {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", addDigits( 5 ));
    }

    public static int addDigits(int num) {
        return (num-1)%9 + 1;
    }

}
