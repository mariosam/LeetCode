/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindTheWinnerOfTheCircularGameTest {

    @Test
	public void testFindTheWinnerOfTheCircularGame() throws Exception {
        //Test 1
        int want = 3;
        int got = FindTheWinnerOfTheCircularGame.findTheWinner( 5, 2 );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = FindTheWinnerOfTheCircularGame.findTheWinner( 6, 5 );
        assertEquals(want, got);
	}

}
