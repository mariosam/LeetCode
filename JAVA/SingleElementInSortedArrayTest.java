/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class SingleElementInSortedArrayTest {

    @Test
	public void testSingleElementInSortedArray() throws Exception {
        //Test 1
        int want = 2;
        int got = SingleElementInSortedArray.singleNonDuplicate( new int[]{1,1,2,3,3,4,4,8,8} );
        assertEquals(want, got);
        //Test 2
        want = 10;
        got = SingleElementInSortedArray.singleNonDuplicate( new int[]{3,3,7,7,10,11,11} );
        assertEquals(want, got);
        //Test 3
        want = 1;
        got = SingleElementInSortedArray.singleNonDuplicate( new int[]{1,2,2,3,3} );
        assertEquals(want, got);
        //Test 4
        want = 2;
        got = SingleElementInSortedArray.singleNonDuplicate( new int[]{1,1,2} );
        assertEquals(want, got);
	}

}
