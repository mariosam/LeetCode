/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class NumberOfWaysToSplitArrayTest {

    @Test
	public void testNumberOfWaysToSplitArray() throws Exception {
        //Test 1
        int want = 2;
        int got = NumberOfWaysToSplitArray.waysToSplitArray( new int[]{10,4,-8,7} );
        assertEquals(want, got);
        //Test 2
        want = 2;
        got = NumberOfWaysToSplitArray.waysToSplitArray( new int[]{2,3,1,0} );
        assertEquals(want, got);
	}

}
