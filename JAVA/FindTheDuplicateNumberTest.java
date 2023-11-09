/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindTheDuplicateNumberTest {

    @Test
	public void testFindTheDuplicateNumber() throws Exception {
        //Test 1
        int want = 2;
        int got = FindTheDuplicateNumber.findDuplicate( new int[]{1,3,4,2,2} );
        assertEquals(want, got);
        //Test 2
        want = 3;
        got = FindTheDuplicateNumber.findDuplicate( new int[]{3,1,3,4,2} );
        assertEquals(want, got);
	}

}
