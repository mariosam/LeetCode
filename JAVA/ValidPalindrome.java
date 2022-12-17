/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class ValidPalindrome {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", isPalindrome( "121" ));
    }

    public static boolean isPalindrome(String s) {
        s = s.toLowerCase().replaceAll("([^a-zA-Z0-9]|\\s)+", "");

        StringBuilder reverse = new StringBuilder();
        reverse.append( s );
        reverse.reverse();

        return s.contentEquals( reverse );
    }

}
