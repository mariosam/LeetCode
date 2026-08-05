/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumNumberOfPushesToTypeWordIITest {

    @Test
	public void testMinimumNumberOfPushesToTypeWordII() throws Exception {
        //Test 1
        int want = 5;
        int got =  MinimumNumberOfPushesToTypeWordII.minimumPushes("abcde");
        assertEquals(want, got);
        //Test 2
        want = 12;
        got =  MinimumNumberOfPushesToTypeWordII.minimumPushes("xyzxyzxyzxyz");
        assertEquals(want, got);
        //Test 3
        want = 24;
        got =  MinimumNumberOfPushesToTypeWordII.minimumPushes("aabbccddeeffgghhiiiiii");
        assertEquals(want, got);
	}

}
