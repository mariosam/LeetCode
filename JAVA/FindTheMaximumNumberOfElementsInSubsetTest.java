/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindTheMaximumNumberOfElementsInSubsetTest {

    @Test
	public void testFindTheMaximumNumberOfElementsInSubset() throws Exception {
        //Test 1
        int want = 3;
        int got = FindTheMaximumNumberOfElementsInSubset.maximumLength( new int[]{5,4,1,2,2} );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = FindTheMaximumNumberOfElementsInSubset.maximumLength( new int[]{1,3,2,4} );
        assertEquals(want, got);
	}

}
