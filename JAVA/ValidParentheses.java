package JAVA;

import java.util.ArrayList;
import java.util.List;

public class ValidParentheses {

    /**
     * Check if the order of opened/closed parentheses is valid.
     */
    public static boolean isValid(String s) {
        List<String> stck = new ArrayList<String>();

        for (int i=0; i < s.length(); i++) {
            String pos = "";
            if (stck.size() > 0) pos = stck.get( stck.size()-1 );

            if (s.charAt(i) == '(' || s.charAt(i) == '{' || s.charAt(i) == '[') {
                stck.add( String.valueOf( s.charAt(i) ) );
            } else if ( ("(".equals(pos) && s.charAt(i) == ')') || ("{".equals(pos) && s.charAt(i) == '}') || ("[".equals(pos) && s.charAt(i) == ']') ) {
                stck.remove( stck.size()-1 );
            } else {
                return false;
            }
        }

        return stck.size()>0 ? false : true;
    }
}
