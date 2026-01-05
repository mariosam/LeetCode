/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class NumberOfWaysToPaintNx3GridTest {

    @Test
	public void testNumberOfWaysToPaintNx3Grid() throws Exception {
        //Test 1
        int want = 12;
        int got = NumberOfWaysToPaintNx3Grid.numOfWays(1 );
        assertEquals(want, got);
        //Test 2
        want = 30228214;
        got = NumberOfWaysToPaintNx3Grid.numOfWays( 5000 );
        assertEquals(want, got);
	}

}
