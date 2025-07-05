/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class FindTheKthCharacterInStringGameI {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", kthCharacter( 10 ));
    }

    public static char kthCharacter(int k) {
        return (char) ('a' + Integer.bitCount(k - 1));
    }
}
