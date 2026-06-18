/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class ProcessStringWithSpecialOperationsI {

    public static void main(String[] args) {
        System.out.printf("Resultado: %s\n", processStr("abc*def#ghi%"));
    }

    public static String processStr(String s) {
        StringBuilder ret = new StringBuilder();
        for (char c : s.toCharArray()) {
            if (c == '*') {
                if (ret.length() > 0) {
                    ret.deleteCharAt(ret.length() - 1);
                }
            } else if (c == '#') {
                if (ret.length() > 0) {
                    ret.append(ret.toString());
                }
            } else if (c == '%') {
                ret.reverse();
            } else {
                ret.append(c);
            }
        }

        return ret.toString();
    }

}
