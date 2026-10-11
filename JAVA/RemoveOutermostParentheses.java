/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class RemoveOutermostParentheses {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", removeOuterParentheses( "/a/c/f" ));
    }

    public static String removeOuterParentheses(String s) {
        char[] sChar = s.toCharArray();
        StringBuilder builder = new StringBuilder();
        int count = 1; // the count of "("
        
        for(int i = 1 ; i < sChar.length ; i++) {
            char ch = sChar[i];
            if( ch == '(' ) {
                count++;
            } else { // ch == ')'
                count--;
            }
            
            if(count == 0) { // outer start and end index
                i++;
                count = 1;
                continue;
            } else {
                builder.append( ch );
            }
        }
        
        return builder.toString();
    }

}
