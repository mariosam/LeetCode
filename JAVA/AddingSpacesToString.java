/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class AddingSpacesToString {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", addSpaces( "spacing", new int[]{0,1,2,3,4,5,6} ));
    }

    public static String addSpaces(String s, int[] spaces) {
        StringBuilder sb = new StringBuilder();
        for (int i = 0, j = 0; i < s.length(); i++) {
            if (j < spaces.length && i == spaces[j]) {
                sb.append(" ");
                j++;
            }
            sb.append(s.charAt(i));
        }
        return sb.toString();
    }

}
