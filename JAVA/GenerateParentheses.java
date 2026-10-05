/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.List;

public class GenerateParentheses {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", generateParenthesis(3));
    }

    public static List<String> generateParenthesis(int n) {
        List<String> ans = new ArrayList<>();
        StringBuilder cur = new StringBuilder();
        dfs(n, n, cur, ans);
        return ans;
    }

    private static void dfs(int left, int right, StringBuilder cur, List<String> ans) {
        if (left == 0 && right == 0) {
            ans.add(cur.toString());
            return;
        }

        if (left > right) {
            return;
        }

        if (left > 0) {
            cur.append('(');
            dfs(left - 1, right, cur, ans);
            cur.deleteCharAt(cur.length() - 1);
        }

        if (right > 0) {
            cur.append(')');
            dfs(left, right - 1, cur, ans);
            cur.deleteCharAt(cur.length() - 1);
        }
    }

}
