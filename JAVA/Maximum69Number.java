/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class Maximum69Number {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maximum69Number(9969));
    }

    public static int maximum69Number (int num) {
        int numCopy = num;
        int indexSix = -1;
        int currDigit = 0;

        while (numCopy > 0) {
            if (numCopy % 10 == 6)
                indexSix = currDigit;
            numCopy /= 10;
            currDigit++;
        }

        return indexSix == -1 ? num : num + 3 * (int) Math.pow(10, indexSix);
    }
}
