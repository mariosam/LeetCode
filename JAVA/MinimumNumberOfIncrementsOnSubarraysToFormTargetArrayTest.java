/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumNumberOfIncrementsOnSubarraysToFormTargetArrayTest {

    @Test
	public void testMinimumNumberOfIncrementsOnSubarraysToFormTargetArray() throws Exception {
        //Test 1
        int want = 3;
        int got =  MinimumNumberOfIncrementsOnSubarraysToFormTargetArray.minNumberOperations( new int[]{1,2,3,2,1} );
        assertEquals(want, got);
        //Test 2
        want = 4;
        got =  MinimumNumberOfIncrementsOnSubarraysToFormTargetArray.minNumberOperations( new int[]{3,1,1,2} );
        assertEquals(want, got);
        //Test 3
        want = 7;
        got =  MinimumNumberOfIncrementsOnSubarraysToFormTargetArray.minNumberOperations( new int[]{3,1,5,4,2} );
        assertEquals(want, got);
	}

}
