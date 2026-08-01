/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumNumberOfPushesToTypeWordITest {

    @Test
	public void testMinimumNumberOfPushesToTypeWordI() throws Exception {
        //Test 1
        int want = 5;
        int got =  MinimumNumberOfPushesToTypeWordI.minimumPushes( "abcde" );
        assertEquals(want, got);
        //Test 2
        want = 12;
        got =  MinimumNumberOfPushesToTypeWordI.minimumPushes( "xycdefghij" );
        assertEquals(want, got);
	}

}
