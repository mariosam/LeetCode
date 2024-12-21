/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaxChunksToMakeSortedTest {

    @Test
	public void testMaxChunksToMakeSorted() throws Exception {
        //Test 1
        int want = 1;
        int got = MaxChunksToMakeSorted.maxChunksToSorted( new int[]{4,3,2,1,0} );
        assertEquals(want, got);
        //Test 2
        want = 4;
        got = MaxChunksToMakeSorted.maxChunksToSorted( new int[]{1,0,2,3,4} );
        assertEquals(want, got);
	}

}
