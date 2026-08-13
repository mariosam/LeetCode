/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;

import org.junit.Test;

public class StoneGameIVTest {

    @Test
	public void testStoneGameIV() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = StoneGameIV.winnerSquareGame(1);
        assertEquals(want, got);
        //Test 2
        want = false;
        got = StoneGameIV.winnerSquareGame(2);
        assertEquals(want, got);
        //Test 3
        want = true;
        got = StoneGameIV.winnerSquareGame(4);
        assertEquals(want, got);
	}

}
