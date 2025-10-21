/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximumNumberOfDistinctElementsAfterOperationsTest {

    @Test
	public void testMaximumNumberOfDistinctElementsAfterOperations() throws Exception {
        //Test 1
        int want = 6;
        int got = MaximumNumberOfDistinctElementsAfterOperations.maxDistinctElements( new int[]{1,2,2,3,3,4}, 2 );
        assertEquals(want, got);
        //Test 2
        want = 3;
        got = MaximumNumberOfDistinctElementsAfterOperations.maxDistinctElements( new int[]{4,4,4,4}, 1 );
        assertEquals(want, got);
	}

}
