/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CheckIfaParenthesesStringCanBeValid {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", canBeValid( "))()))", "010100" ));
    }

    public static boolean canBeValid(String s, String locked) {
        if (s.length() % 2 == 1) return false;
        int total = 0, open = 0, closed = 0;
        for(int i = s.length() - 1; i >= 0; i--) {
            if (locked.charAt(i) == '0')
                total += 1;
            else if (s.charAt(i) == '(')
                open += 1;
            else if (s.charAt(i) == ')')
                closed += 1;
            if (total - open + closed < 0) return false;
        }
        total = open = closed = 0;
        for(int i = 0; i < s.length(); i++) {
            if (locked.charAt(i) == '0')
                total += 1;
            else if (s.charAt(i) == '(')
                open += 1;
            else if (s.charAt(i) == ')')
                closed += 1;
            if (total + open - closed < 0) return false;
        }
        return true;
    }

}
