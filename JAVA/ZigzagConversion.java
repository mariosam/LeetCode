/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class ZigzagConversion {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", convert( "AA", 2 ));
    }

    public static String convert(String s, int numRows) {
        int totalDiff = numRows * 2 - 2;
        if ( s.length() <= numRows || numRows < 2 ) return s;

        String result = "";
        int upDiff = totalDiff;
        int downDiff = totalDiff - upDiff;

        for ( int i = 0; i < numRows; i++ ) {
            int currChar = downDiff / 2;
            Boolean isGoingUp = true;
            
            while ( currChar < s.length() ) {
                result += s.charAt(currChar);
                
                if ( i == 0 || i == (numRows - 1) ) {
                    currChar += totalDiff;
                } else {
                    currChar = isGoingUp ? currChar + upDiff : currChar + downDiff;
                    isGoingUp = !isGoingUp;
                }
            }
            upDiff -= 2;
            downDiff = totalDiff - upDiff;
        }

        return result;
    }
}
