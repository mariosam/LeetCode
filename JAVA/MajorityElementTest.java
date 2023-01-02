/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MajorityElementTest {

    @Test
	public void testMajorityElement() throws Exception {
        //Test 1
        int want = 3;
        int got = MajorityElement.majorityElement( new int[]{3,2,3} );
        assertEquals(want, got);
        //Test 2
        want = 2;
        got = MajorityElement.majorityElement( new int[]{2,2,1,1,1,2,2} );
        assertEquals(want, got);
	}

}
