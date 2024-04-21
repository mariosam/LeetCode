/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Stack;

public class MakeTheStringGreat {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", makeGood( "leEeetcode" ));
    }

    public static String makeGood(String s) {
        Stack<Character> stack = new Stack<>();
        for (int i = 0; i < s.length(); i++) {
            if (!stack.isEmpty() && (s.charAt(i) == stack.peek() + 32 || s.charAt(i) == stack.peek() - 32)) {
                stack.pop();
                continue;
            }
            stack.push(s.charAt(i));
        }
        StringBuilder sb = new StringBuilder();
        for (Character c : stack) {
            sb.append(c);
        }
        return sb.toString();
    }

}
