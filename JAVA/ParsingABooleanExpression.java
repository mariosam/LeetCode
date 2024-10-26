/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Stack;

public class ParsingABooleanExpression {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", parseBoolExpr( "121" ));
    }

    public static boolean parseBoolExpr(String expression) {
        Stack<Character> st = new Stack<>();
        Stack<Character> c = new Stack<>();

        for (char ch : expression.toCharArray()) {
            if (ch == '&' || ch == '|' || ch == '!') {
                st.push(ch);
            } else if (ch == ')') {
                char op = st.pop();
                boolean f = op == '&';

                while (c.peek() != '(') {
                    boolean val = c.pop() == 't';
                    if (op == '&') {
                        f = f && val;
                    } else {
                        f = f || val;
                    }
                }
                c.pop(); // Remove the '('

                if (op == '!') {
                    f = !f;
                }

                c.push(f ? 't' : 'f');
            } else if (ch != ',') {
                c.push(ch);
            }
        }

        return c.pop() == 't';
    }

}
