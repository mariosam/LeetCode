/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class WaterBottles {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", numWaterBottles( 2, 4 ));
    }

    public static int numWaterBottles(int numBottles, int numExchange) {
        if (numBottles < numExchange) {
            return numBottles;
        }

        int quotient = numBottles / numExchange;
        int reminder = numBottles % numExchange;
        int ans = numBottles + quotient;

        while (quotient + reminder >= numExchange) {
            int total = quotient + reminder;
            quotient = total / numExchange;
            reminder = total % numExchange;
            ans += quotient;
        }

        return ans;
    }

}
