/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindTheStudentThatWillReplaceTheChalkTest {

    @Test
	public void testFindTheStudentThatWillReplaceTheChalk() throws Exception {
        //Test 1
        int want = 0;
        int got = FindTheStudentThatWillReplaceTheChalk.chalkReplacer( new int[]{5,1,5}, 22 );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = FindTheStudentThatWillReplaceTheChalk.chalkReplacer( new int[]{3,4,1,2}, 25 );
        assertEquals(want, got);
	}

}
