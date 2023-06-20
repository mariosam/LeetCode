/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ValidateStackSequencesTest {

    @Test
	public void testValidateStackSequences() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = ValidateStackSequences.validateStackSequences( new int[]{1,2,3,4,5}, new int[]{4,5,3,2,1} );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = ValidateStackSequences.validateStackSequences( new int[]{1,2,3,4,5}, new int[]{4,3,5,1,2} );
        assertEquals(want, got);
	}

}
