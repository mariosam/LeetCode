/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class NumberOfStepsToReduceNumberInBinaryRepresentationToOne {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", numSteps( "1010" ));
    }

    public static int numSteps(String s) {
        int carry = 0;
        int res = 0;
        int n = s.length();
        
        for (int i = n - 1; i > 0; i--) {
            res += 1;
            if ((s.charAt(i) - '0') + carry == 1) {
                carry = 1;
                res += 1;
            }
        }
        
        return res + carry;
    }

}
