/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Stack;

public class SimplifyPath {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", simplifyPath( "/../" ));
    }

    public static String simplifyPath(String path) {
        if (null == path || path.length() <= 0) return "/";
        Stack<String> stack = new Stack<>();

        for (String s : path.split("/")) {
            if ("".equals(s) || "/".equals(s) || ".".equals(s)) {
                continue;
            }
            if ("..".equals(s)) {
                if (!stack.isEmpty()) {
                    stack.pop();
                }
            } else {
                stack.push(s);
            }
        }
        
        return "/" + String.join("/", stack);
    }

}
