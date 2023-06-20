/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Stack;

public class ValidateStackSequences {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", validateStackSequences( new int[]{1,2,3,4,5}, new int[]{5,4,3,2,1} ));
    }

    public static boolean validateStackSequences(int[] pushed, int[] popped) {
        Stack<Integer> st = new Stack<>();
        int it = 0;

        for (int i : pushed) {
            if (i == popped[it]) {
                ++it;
                while (!st.isEmpty() && st.peek() == popped[it]) {
                    st.pop();
                    it++;
                }
            } else {
                st.push(i);
            }
        }
				
        return st.isEmpty();
    }

}
