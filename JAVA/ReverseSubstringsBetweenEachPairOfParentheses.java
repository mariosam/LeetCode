/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class ReverseSubstringsBetweenEachPairOfParentheses {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", reverseParentheses( "(abcd)" ));
    }

    public static String reverseParentheses(String s) {
        StringBuilder sb = new StringBuilder();
        for (char c : s.toCharArray()) {
            if (c == ')') {
                StringBuilder temp = new StringBuilder();
                while (sb.charAt(sb.length() - 1) != '(') {
                    temp.append(sb.charAt(sb.length() - 1));
                    sb.deleteCharAt(sb.length() - 1);
                }
                sb.deleteCharAt(sb.length() - 1); // remove '('
                sb.append(temp);
            } else {
                sb.append(c);
            }
        }
        return sb.toString();
    }

}
