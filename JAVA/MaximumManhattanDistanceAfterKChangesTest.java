/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximumManhattanDistanceAfterKChangesTest {

    @Test
	public void testMaximumManhattanDistanceAfterKChanges() throws Exception {
        //Test 1
        int want = 3;
        int got = MaximumManhattanDistanceAfterKChanges.maxDistance( "NWSE", 1 );
        assertEquals(want, got);
        //Test 2
        want = 6;
        got = MaximumManhattanDistanceAfterKChanges.maxDistance( "NSWWEW", 3 );
        assertEquals(want, got);
	}

}
