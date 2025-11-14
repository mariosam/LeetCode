/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CountOperationsToObtainZero {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countOperations( 2, 3 ));
    }

    public static int countOperations(int num1, int num2) {
        if (num1 == 0 || num2 == 0) {
            return 0;
        } else if (num1 == num2) {
            return 1;
        }

        int count = 0;
        while (num1 != 0 && num2 != 0) {
            count++;
            if (num1 == num2) {
                break;
            } else if (num1 > num2) {
                num1 -= num2;
            } else {
                num2 -= num1;
            }
        }

        return count;
    }

}
