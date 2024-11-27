/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class SlidingPuzzleTest {

    @Test
	public void testSlidingPuzzle() throws Exception {
        //Test 1
        int want = 1;
        int got = SlidingPuzzle.slidingPuzzle( new int[][]{{1,2,3},{4,0,5}} );
        assertEquals(want, got);
        //Test 2
        want = -1;
        got = SlidingPuzzle.slidingPuzzle( new int[][]{{1,2,3},{5,4,0}} );
        assertEquals(want, got);
        //Test 3
        want = 5;
        got = SlidingPuzzle.slidingPuzzle( new int[][]{{4,1,2},{5,0,3}} );
        assertEquals(want, got);
	}

}
